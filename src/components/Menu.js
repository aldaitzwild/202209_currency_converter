import React from 'react';

const Menu = ({ steps }) => (
  <div className="column is-3">
    <aside className="menu">
      <p className="menu-label">
        Liste des étapes
      </p>
      <ul className="menu-list">
        {
          steps.map(({ slug, title }) => (
            <li key={slug}>
              <a href={`#${slug}`} className="has-background-grey has-text-white">
                {/* <i className="fab fa-github"></i> */}
                {` ${title}`}
              </a>
            </li>
          ))
        }
      </ul>
    </aside>
  </div>
);

export default Menu;
