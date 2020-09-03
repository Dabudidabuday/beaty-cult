const HtmlWebpackPlugin = require('html-webpack-plugin');
const path = require('path');

module.exports = {
    mode: 'development',
    entry: __dirname + "/src/app/index.js",
    output: {
        path: __dirname + '/dist',
        filename: 'bundle.js',
        publicPath: '/'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                use: 'babel-loader',
                exclude: [
                    /node_modules/
                ]
            },
            {
                test: /\.(sass|scss|css)$/,
                use: [
                    "style-loader",
                    "css-loader",
                    "sass-loader"
                ]
            },
            {
                test: /\.(png|svg|jpg|gif|ttf)$/,
                use: [
                    'file-loader',
                ],
            },
            {
                test: /\.(html)$/,
                use: {
                    loader: 'html-loader',
                    options: {
                        // attributes: ['img:src', 'link:href']
                    }
                }
            }
        ]
    },
    plugins: [  // Array of plugins to apply to build chunk
        new HtmlWebpackPlugin({
            template: __dirname + "/public/course.html",
            inject: 'body'
        })
    ],
    devServer: {
        contentBase: './src/public',
        port: 3000,
    },
    resolve: {
        alias: {
            "@components": path.resolve(__dirname, 'src/app/components'),
            "@images": path.resolve(__dirname, 'public/assets/images'),
            "@plugins": path.resolve(__dirname, 'src/app/plugins'),
            "@fonts": path.resolve(__dirname, 'public/assets/fonts'),
        }
    }
};
