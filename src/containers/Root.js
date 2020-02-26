import React, { Component } from 'react'
import { Provider, connect } from 'react-redux'
import configureStore from '../configureStore'
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'

import Sprint from '../components/Sprint'
// import { PrivateRoute } from '../functions'

const store = configureStore()

export default class Root extends Component {
    render() {
        return (
            <Provider store={store}>
                <Router>
                    <Switch>

                        <Sprint />

                    </Switch>
                </Router>
            </Provider>
        )
    }
}