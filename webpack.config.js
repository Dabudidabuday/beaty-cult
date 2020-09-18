const path = require('path');

// include the js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

// include the css extraction and minification plugins
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

// clean out build directories on each build
const CleanWebpackPlugin = require('clean-webpack-plugin');
const assetPath = (domain) => `//${domain}/wp-content/themes/beauty-cult`;

module.exports = env => {

    const isProd = env.production;
   return {
     entry: ["./js/src/app.js", "./css/src/app.scss"],
     output: {
       filename: "./js/dist/app.min.js",
       path: path.resolve(__dirname),
       publicPath: isProd
         ? assetPath("beauty-cult.mirulin.com")
         : assetPath("localhost:9000/beauty-cult-wordpress"),
     },
     module: {
       rules: [
         {
           test: /\.js$/,
           exclude: /node_modules/,
           use: {
             loader: "babel-loader",
             options: {
               presets: ["babel-preset-env"],
             },
           },
         },

         {
           test: /\.(png|svg|jpg|gif)$/,
           use: [
             {
               loader: "file-loader",
               options: {
                 name: "/images/[name].[ext]",
               },
             },
           ],
         },

         {
           test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
           use: [
             {
               loader: "url-loader",
               options: {
                 name: "/fonts/[name].[ext]",
                 limit: false,
               },
             },
           ],
         },

         // {
         //     test: /\.(jpe?g|png|ttf|eot|svg|woff(2)?)(\?[a-z0-9=&.]+)?$/,
         //     use: 'base64-inline-loader'
         // },

         // compile all .scss files to plain old css
         {
           test: /\.(sass|scss)$/,
           use: [
             {
               loader: "file-loader",
               options: {
                 name: "css/dist/main.min.css",
               },
             },
             {
               loader: "extract-loader",
             },
             {
               loader: "css-loader",
             },
             {
               loader: "postcss-loader",
             },
             {
               loader: "sass-loader",
             },
           ],
         },
         // {
         //     test: /\.(png|jpe?g|gif|svg|eot|ttf|woff|woff2)$/i,
         //     loader: 'url-loader',
         //     options: {
         //         limit: 8192,
         //     },
         // },
       ],
     },
     plugins: [
       new MiniCssExtractPlugin({
         filename: "./css/dist/main.min.css",
       }),

       // TODO clean out build directories on each build
       // new CleanWebpackPlugin({
       //     cleanOnceBeforeBuildPatterns: ['./js/build/*','./css/build/*']
       // })
     ],
     optimization: {
       minimizer: [
         // enable the js minification plugin
         new UglifyJSPlugin({
           cache: true,
           parallel: true,
         }),
         // enable the css minification plugin
         new OptimizeCSSAssetsPlugin({}),
       ],
     },
     resolve: {
       alias: {
         "@components": path.resolve(__dirname, "js/src/components"),
         "@images": path.resolve(__dirname, "public/assets/images"),
         // "@plugins": path.resolve(__dirname, 'src/app/plugins'),
         "@fonts": path.resolve(__dirname, "public/assets/fonts"),
       },
     },
   };
};
