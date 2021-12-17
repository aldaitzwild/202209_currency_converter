import React from 'react';
import Markdown from 'react-markdown';

const MessageBody = (props) => (
  <div className="message-body">
    {props.children} 
  </div>
);

const Steps = ({ steps }) => (
  steps.map(({ title, slug, content }) => (
    <div key={slug} className="box">
      <h4 id={slug} className="title is-3">
        {/* <i className="fab fa-github"></i> */}
        {title}
        </h4>
      <article className="message is-primary">
        <Markdown
          source={content}
          renderers={{
            paragraph: MessageBody,
            list: MessageBody
          }}
          escapeHtml={false}
        />
      </article>
    </div>
  ))
);

export default Steps;
