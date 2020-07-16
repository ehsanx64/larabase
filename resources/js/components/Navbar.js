import React from 'react';

export default class Navbar extends React.Component {
	constructor() {
		super();
	}

	render() {
		return (
			<div className="navbar-fixed">
				<nav>
					<div className="nav-wrapper container">
						<a href="#" className="brand-logo">Admin</a>
						<div className="navmenu right hide-on-med-and-down">
							<ul>
								<li>
									<a href="#">آیتم ۱</a>
								</li>
							</ul>
						</div>

						<div className="topmenu left">
							<ul>
								<li>
									<a href="/login">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		)
	}

}
