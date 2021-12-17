export default function getSubtitle (markdown) {
    const splitRe = /## (.*)/g;
    return markdown.split(splitRe)[1];
}