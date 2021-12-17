import React, { Component } from 'react';
import Prism from 'prismjs';
import 'prismjs/components/prism-javascript';
import 'prismjs/components/prism-bash';
import Hero from './components/Hero';
import Menu from './components/Menu';
import Steps from './components/Steps';
import getSubtitle from './helpers/getSubtitle'
import getTitle from './helpers/getTitle'
import splitSteps from './helpers/splitSteps';

class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      steps: [],
      subtitle: '',
      title: ''
    };
  }

  async componentDidMount() {
    const res = await fetch('content.md');
    const markdown = await res.text();
    const steps = splitSteps(markdown);
    const title = getTitle(markdown);
    const subtitle = getSubtitle(markdown);
    document.title = title;
    this.setState({ steps, subtitle, title }, Prism.highlightAll);
  }

  render() {
    const { steps, subtitle, title } = this.state;
    return (
      <div className="App">
        <Hero title={title} subtitle={subtitle}/>
        <section className="section">
	        <div className="container">
	        	<div className="columns">
              <Menu steps={steps.slice(1)} />

              <div className="column is-9">
                <div className="content is-medium">
                  <h3 className="title is-3">{steps.length ? steps[0].title : ''}</h3>
                  <p><em>{steps.length ? steps[0].content : ''}</em></p>

                    <Steps steps={steps.slice(1)} />
                </div>
              </div>
            </div>
          </div>
        </section>
      
      </div>
    );
  }
}

export default App;
