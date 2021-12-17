# Workshop template

A React-based workshop template. It basically reads a markdown file, splits it into steps, and formats it nicely.

An example of what you get: <https://wildcodeschool.github.io/initiation-javascript/>

For the non-JS out there, you need Node.js, which you *should* install with [NVM](https://github.com/nvm-sh/nvm) (Linux/MacOS) or [NVM-Windows](https://github.com/coreybutler/nvm-windows).

## 1. Create the new workshop repository

**Don't fork this repository**.

Use the `use this template` git button!

## 2. Change its parameters

Clone the repository locally. Then, in `package.json`, replace `workshop-template` with your own workshop URL (e.g. `farting-unicorns`) in the `homepage` value (and also in `name` but that doesn't matter).

## 3. Edit it!

The content is located in `public/content.md`.

You just have to follow its conventions:

* `#` for title, `##` for subtitle
* The first `####` and content below will be displayed as an introduction.
* **All the following** `####` and content **will be displayed as a card**, and their titles automagically added to the left nav menu.

## 4. Preview it locally

* `npm install` or `yarn` to install dependencies
* `npm start` or `yarn start` to launch

## 5. Push and deploy it!

- Once pushed, you should just have to run `npm run deploy` or `yarn deploy`.
- It will automatically create a `gh-branch` on Github repository. 
- Use Github Page (in Github Settings) and select `gh-branch`. Wait few minutes, then the workshop will be available, congrats! 

![Thanos - That's all folks](https://cdn.shopify.com/s/files/1/0073/2452/products/thatsall_1024x1024.jpg?v=1563557232)
