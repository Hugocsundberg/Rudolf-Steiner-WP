const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  mode: "development",
  context: path.resolve(__dirname, "assets"),
  output: {
    filename: "main.bundle.js",
    path: path.resolve(__dirname, "assets/dist"),
  },
  watch: true,
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          "css-loader",
          "postcss-loader",
        ],
      },
    ],
  },

  plugins: [new MiniCssExtractPlugin()],
};
