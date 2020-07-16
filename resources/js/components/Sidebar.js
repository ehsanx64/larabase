import React from 'react';

export default class Sidebar extends React.Component {
	constructor(props) {
		super(props);
	}

	render() {
		return (
			<div className="col s12 m3 sidebar-wrapper">
				<div className="row">
					<h4>{this.props.title}</h4>
				</div>
			</div>
		)
	}

}
