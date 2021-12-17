import React from 'react';

const Hero = ({subtitle, title}) => (

<section className="hero is-primary has-background-pink">
	<div className="hero-body">
		<div className="columns">
			<div className="column is-12">
				<div className="container content">
					<i className="is-large fas fa-code"></i>
					<h1 className="title">{title}</h1>
					<h3 className="subtitle">
						{subtitle}
					</h3>
				</div>
			</div>
		</div>
	</div>
</section>
);

export default Hero;
