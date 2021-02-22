const { merge } = require("webpack-merge");
const commonConfig = require("./webpack.base.js");
const FileManagerWebpackPlugin = require("filemanager-webpack-plugin");
const { getStaticPath } = require("./config.js");

let current_env = "";
if (process.env.CURRENT_ENV) {
  current_env = process.env.CURRENT_ENV;
}

let staticBase = getStaticPath(current_env);

const prodConfig = {
  /**
   * 打包模式，不配置会警告，但底层还是会去配置默认的，就是production
   * production: 压缩模式，被压缩的代码
   * development: 开发模式，不压缩的代码
   *
   */
  mode: "development",
  // mode: 'production',
  output: {
    // path: path.resolve(__dirname, '../dist_dev/star'),
    // publicPath: '/static/'
    path: "E:\\cmwork\\star\\idreamsky-sar\\templets\\hl_donghua",
    publicPath: staticBase,
  },
  plugins: [],
  // 监听
  watch: true,
  watchOptions: {
    poll: 1, // 每秒询问多少次
    aggregateTimeout: 500, //防抖 多少毫秒后再次触发
    ignored: /(node_modules|dist|dist_dev|scripts)/, //忽略时时监听
  },
};

module.exports = merge(commonConfig, prodConfig);
