const { merge } = require('webpack-merge');
const commonConfig = require('./webpack.base.js');
const FileManagerWebpackPlugin = require('filemanager-webpack-plugin')

const prodConfig = {
  /**
  * 打包模式，不配置会警告，但底层还是会去配置默认的，就是production
  * production: 压缩模式，被压缩的代码
  * development: 开发模式，不压缩的代码
  *
  */
  mode: 'production',
  plugins: [
    new FileManagerWebpackPlugin({  // 需要在 plugins 数组里添加
      events: {
        onEnd: {
          delete: [
            './dist/portal.zip', // 删除之前已经存在的压缩包
          ],
          archive: [
            {
              source: './dist',
              destination: './dist/portal.zip'
            },
          ]
        }
      }
    })
  ]
}

module.exports = merge(commonConfig, prodConfig);