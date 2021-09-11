const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = [{
      entry: '/src/js/main.js',

      output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'build/frontend')
      },
      module: {
        rules: [
          {
            test: /\.js$/i,
            exclude: /node_modules/,
            use: {
              loader: 'babel-loader',
            },
          },
          {
            test: /\.css$/i,
            use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader'],        
          },
        ],
      },
      plugins: [
        new MiniCssExtractPlugin(),
      ]
},{
      entry: '/src/js/editor.js',

      output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'build/gutenberg')
      },
      module: {
        rules: [
          {
            test: /\.js$/i,
            exclude: /node_modules/,
            use: {
              loader: 'babel-loader',
            },
          },
          {
            test: /\.css$/i,
            use: [MiniCssExtractPlugin.loader, 'css-loader', 'postcss-loader'],        
          },
        ],
      },
      plugins: [
        new MiniCssExtractPlugin(),
      ]
}]
