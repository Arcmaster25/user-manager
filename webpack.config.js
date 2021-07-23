module.exports = {
    mode: 'development',
	entry: './resources/js/index.js',
	output: {
		filename: 'bundle.js',
		path: __dirname + '/dist',
	},
	module: {
        rules: [
            {
                test: /\.css$/i,
                use: ['style-loader', 'css-loader'],
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    "style-loader",
                    "css-loader",
                    "sass-loader",
                ],
            },
        ],
    },
};