import React from 'react';
import ReactDOM from 'react-dom';
import { render } from 'react-dom';
import { Route, Switch } from 'react-router-dom';
import { Provider } from 'react-redux';
import { createStore, combineReducers, applyMiddleware } from 'redux';
import {
    ConnectedRouter,
    connectRouter,
    routerMiddleware
} from 'connected-react-router';
import { createBrowserHistory } from 'history';
import thunk from 'redux-thunk';
import App from './components/App';

const history = createBrowserHistory();

// Create redux store
// TODO : Add reducers
const store = createStore(
    combineReducers({
        router: connectRouter(history)
    }),
    applyMiddleware(routerMiddleware(history), thunk)
);

// App Entrypoint
ReactDOM.render(
    <Provider store={store}>
        <ConnectedRouter history={history}>
        <Switch>
            <Route path="/" component={App} exact key="default" />,
            {/* Ressources routes */}
        <Route render={() => <h1>Not Found</h1>} />
        </Switch>
    </ConnectedRouter>
    </Provider>,
    document.getElementById('root')
);