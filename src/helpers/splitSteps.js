import slug from 'slug';

export default function splitSteps(markdown) {
  const splitRe = /#### (.*)/g;
  const split = markdown.split(splitRe);
  split.shift();
  const steps = [];
  for (let i = 0; i < split.length; i += 2) {
    steps.push({
      title: split[i],
      slug: slug(split[i], {lower: true}),
      content: split[i + 1].trim()
    })
  }
  return steps;
}
