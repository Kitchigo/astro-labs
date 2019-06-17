import React, { Component, PropTypes } from 'react';
import { connect } from 'react-redux';

// App NavBar
class Nav extends Component {
    constructor() {
    super();
    }

    componentDidMount() {
    }

    render() {
    return (
        <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
            <a className="navbar-brand" href="#"> Astro-Labs </a>
        </nav>
    );
    }
}

const mapStateToProps = (state) => ({
});

export default connect(mapStateToProps)(Nav);