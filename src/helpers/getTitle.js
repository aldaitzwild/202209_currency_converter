export default function getTitle (markdown) {
    const splitRe = /# (.*)/g;
    return markdown.split(splitRe)[1];
}