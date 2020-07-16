import React, { Fragment } from 'react';
import ReactDOM from 'react-dom';

import Navbar from './Navbar';
import Sidebar from './Sidebar';

class Admin extends React.Component {
	constructor() {
		super();

		this.state = {
			sidebarTitle: 'Sidebar'
		}
	}

	componentDidMount() {
		console.log('componentDidMount()');
		var that = this;

		setTimeout(function () {
			that.setState({
				sidebarTitle: '-= Sidebar =-'
			});
		}, 2000);
	}

	componentDidUpdate() {
		console.log('componentDidUpdate()');
	}

	render() {
		console.log('render()');
		return (
			<Fragment>
				<Navbar />
				<div className="container">
					<div className="row">
						<Sidebar title={this.state.sidebarTitle}/>

						<div className="col s12 m9 content-wrapper">
							<div className="row">
								<h1>Hey </h1>
							</div>
						</div>
					</div>
				</div>
			</Fragment>
		)
	}

}

if (document.getElementById('admin-dashboard-main')) {
	ReactDOM.render(<Admin/>, document.getElementById('admin-dashboard-main'));
}
