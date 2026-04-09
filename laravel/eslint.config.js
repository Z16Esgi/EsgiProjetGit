export default [
  {
    files: ["**/*.js"],
    ignores: ["node_modules/**", "public/**", "vendor/**"],
    languageOptions: {
      ecmaVersion: 2021,
      sourceType: "module",
      globals: {
        window: "readonly",
        document: "readonly",
        console: "readonly",
      },
    },
    rules: {},
  },
];