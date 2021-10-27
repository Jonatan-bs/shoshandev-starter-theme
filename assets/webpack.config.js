const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin')

const ProgressBarPlugin = require('progress-bar-webpack-plugin')
const chalk = require('chalk') // Needed for progress bar
const SpeedMeasurePlugin = require("speed-measure-webpack-plugin");
const smp = new SpeedMeasurePlugin();

module.exports = smp.wrap([{
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
            test: /\.scss$/i,
            use: [
              MiniCssExtractPlugin.loader,
              { loader: 'css-loader', options: { importLoaders: 2 } },
              { loader: 'postcss-loader' },
              { loader: 'sass-loader' },
            ],            
          },
        ],
      },
      plugins: [
        new MiniCssExtractPlugin(),
        //  Progress bar 
        new ProgressBarPlugin({
          format: `  :msg [:bar] ${chalk.green.bold(':percent')} (:elapsed s)`
        }),
        new BrowserSyncPlugin({
          files: ["**/*.php", "/build/gutenberg/main.css",  "/build/gutenberg/main.js"],
          proxy: "http://localhost:8888/wordpress-startertheme/", // your dev server here
        }),
      ]
}
,{
      entry: '/src/js/gutenberg.js',

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
            test: /\.scss$/i,
            use: [
              MiniCssExtractPlugin.loader,
              { loader: 'css-loader', options: { importLoaders: 2 } },
              { loader: 'postcss-loader' },
              { loader: 'sass-loader' },
            ],        
          },
        ],
      },
      plugins: [
        new ProgressBarPlugin({
          format: `  :msg [:bar] ${chalk.green.bold(':percent')} (:elapsed s)`
        }),
        new MiniCssExtractPlugin(),
      ]
    }
  ])

