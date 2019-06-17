import React from 'react';
import ReactDOM from 'react-dom';
import Nav from './Nav';
import { connect } from 'react-redux';

// App default page
class App extends React.Component {
    constructor() {
        super();
    }

    componentDidMount() {
    }

    render() {
        return (
            <div>
                <Nav />
                <div className="row">
                </div>
            </div>
        );
    }
}

const mapStateToProps = (state) => ({
});

export default connect(mapStateToProps)(App);