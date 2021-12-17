import getTitle from './getTitle';

const markdown = `# Title

## Subtitle

#### Etape 1

Blabla

#### Etape 2

More blabla
`;

describe('getTitle', () => {
  it('get the title', () => {
    const title = getTitle(markdown);
    expect(title).toEqual("Title");
  });
});