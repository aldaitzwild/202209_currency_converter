import getSubtitle from './getSubtitle';

const markdown = `# Title

## Subtitle

#### Etape 1

Blabla

#### Etape 2

More blabla
`;

describe('getSubtitle', () => {
  it('get the subtitle', () => {
    const subtitle = getSubtitle(markdown);
    expect(subtitle).toEqual("Subtitle");
  });
});