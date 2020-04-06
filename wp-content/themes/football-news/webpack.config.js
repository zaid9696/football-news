const path = require('path');

BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const webpack = require('webpack');

module.exports = {
  entry: './src/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, 'dist'),
  },
  mode: 'development',
  devtool: 'source-map',
  devServer: {
    contentBase: path.join(__dirname, 'dist'),
    compress: true,
    port: 9000
  },
  module:{
    rules:[
        {
            test:/\.css$/,
            use:['style-loader','css-loader']
        }
   ]
},
  plugins:[
    new BrowserSyncPlugin({
        files: '**/*.php',
        proxy: 'http://localhost/football-news/',
      }),
      new webpack.ProvidePlugin({
        $: path.resolve(path.join(__dirname, 'node_modules/jquery')),
        jQuery: path.resolve(path.join(__dirname, 'node_modules/jquery')),
        'window.jQuery': path.resolve(path.join(__dirname, 'node_modules/jquery')),
    }),
  ]
};