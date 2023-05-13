# SouJava Blog - WordPress Theme

## Template under development

All files and changes will be available in `development` branch. [Click here to check development branch](https://github.com/Wilian-N-Silva/soujava-blog-theme/tree/development)

## How to run

- Clone this repository, unzip and move the folder to inside of `wordpress-folder/wp-content/themes/`

- Inside of your wp-admin, navigate to 'Appearance' and the theme will be shown

- Hover your cursor above the theme image and click on 'Activate' button

### Style changes

This blog theme is been built using a CSS pre-processor called SCSS. Any changes has to be inside of SCSS file structure located in `assets/style/scss` then exported to CSS using the following command:

```console
sass ./assets/style/scss/main.scss ./assets/style/main.min.css --style compressed
```

if you need to do constantly changes i higly recommend to use the `--watch` parameter to keep the code running for each style change:

```console
sass --watch ./assets/style/scss/main.scss ./assets/style/main.min.css --style compressed
```
