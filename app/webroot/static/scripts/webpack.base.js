let path = require('path')
let HtmlWebpackPlugin = require('html-webpack-plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
let optimizeCss = require('optimize-css-assets-webpack-plugin')
let UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const { getStaticPath } = require('./config.js');
require('babel-polyfill');

let current_env = ''
if (process.env.CURRENT_ENV) {
  current_env = process.env.CURRENT_ENV
}

// let staticBase = '.'
// if (current_env === 'public') {
//   staticBase = 'http://localhost:3013/star'
// }
let staticBase = getStaticPath(current_env)

// 资源路径
const resBaseUrl = ''
// 项目路径
const baseUrl = '/'

module.exports = {
  optimization: { // 优化项
    minimizer: [
      new UglifyJsPlugin({
        cache: true,
        parallel: true,
        sourceMap: true, // 源码映射
      }),
      new optimizeCss()
    ]
  },
  // 暂不使用
  // devServer: { // 开发服务器的配置
  //   port: 3013,
  //   progress: true,
  //   // contentBase: '/dist'
  // },
  // 多入口
  mode: 'development',
  // mode: 'production',
  entry: {
    index: './js/index.js',
  },
  output: {
    filename: resBaseUrl + 'js/[name].bundle.js?v=' + new Date().getTime(),
    path: path.resolve(__dirname, '../dist' + baseUrl),
    // publicPath: '/static/'
    publicPath: '.'
  },
  plugins: [
    // new CleanWebpackPlugin({ cleanStaleWebpackAssets: false }),
    new CleanWebpackPlugin({
      cleanStaleWebpackAssets: false,
    }),
    new MiniCssExtractPlugin({
      filename: resBaseUrl + 'css/[name].css?v=' + new Date().getTime()
    }),
  ],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, '../../static')
    }
  },
  module: { // 模块
    // loader 
    rules: [
      // babel
      {
        test: /\.js$/i,
        use: {
          loader: 'babel-loader',
          options: { // 用babel-loader 需要把es6转es5
            presets: [
              '@babel/preset-env'
            ],
            plugins: [
              // ["@babel/plugin-transform-runtime",
              //   {
              //     "regenerator": true
              //   }
              // ],
              ["@babel/plugin-proposal-decorators", {
                legacy: true
              }],
              [
                '@babel/plugin-proposal-class-properties', {
                  loose: true
                }
              ],
            ]
          }
        }
      },
      // 处理html中的图片
      // {
      //   test: /\.(htm|html|ejs)$/i,
      //   use: 'html-withimg-loader'
      // },
      // {
      //   test: /\.(png|jpg|gif)$/,
      //   use: [{
      //     loader: 'file-loader',
      //     options: {
      //       esModule: false, // 该项默认为true，改为false即可
      //     }
      //   }]
      // },
      {
        test: /\.(png|jpg|gif)$/,
        // 做一个限制，当图片小于多少k时，用base64 来转化
        // 否则用file-loader产生真实的图片
        use: [{
          loader: 'url-loader',
          options: {
            limit: 10 * 1024,
            esModule: false, // 该项默认为true，改为false即可
            outputPath: '/' + resBaseUrl + 'img/'
          }
        }]
      },
      // 解析 @import 语法
      // style-loader 把css插入head标签中
      // 多个loader需要[]
      // loader顺序 默认从右向左执行
      {
        test: /\.css$/, use: [
          //   {
          //   loader: 'style-loader',
          //   options: {
          //     // 插入最顶部
          //     // insertAt: 'top', // 已废弃
          //     // insert: function insertAtTop(element) {
          //     //   var parent = document.querySelector('head');
          //     //   var lastInsertedElement =
          //     //     window._lastElementInsertedByStyleLoader;

          //     //   if (!lastInsertedElement) {
          //     //     parent.insertBefore(element, parent.firstChild);
          //     //   } else if (lastInsertedElement.nextSibling) {
          //     //     parent.insertBefore(element, lastInsertedElement.nextSibling);
          //     //   } else {
          //     //     parent.appendChild(element);
          //     //   }
          //     //   window._lastElementInsertedByStyleLoader = element;
          //     // },
          //   }
          // }, 
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '../',
            },
          },
          'css-loader',
          'postcss-loader', // 添加前缀
        ]
      },
      {
        test: /\.less$/, use: [
          // {
          //   loader: 'style-loader',
          //   options: {
          //   }
          // },
          // {
          //   loader: MiniCssExtractPlugin.loader,
          //   // options: {
          //   //   publicPath: '/public/path/to/',
          //   // },
          // },
          // MiniCssExtractPlugin.loader,
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              // publicPath: '/public/path/to/',
              publicPath: '../../',
            },
          },
          'css-loader', // @import 路径
          'less-loader', // 把less -> css
          'postcss-loader', // 添加前缀
        ]
      }
    ]
  }
}