import splitSteps from './splitSteps';

const markdown = `# Title

## subTitle

#### Etape 1

Blabla

#### Etape 2

More blabla
`;

describe('splitSteps', () => {
  it('split the steps all right', () => {
    const steps = splitSteps(markdown);
    expect(steps).toEqual([
      { title: 'Etape 1', slug: 'etape-1', content: 'Blabla' },
      { title: 'Etape 2', slug: 'etape-2', content: 'More blabla' },
    ]);
  });
});