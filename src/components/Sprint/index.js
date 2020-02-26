import React, { Component, Fragment } from 'react'
import { connect } from 'react-redux'
import { withRouter } from 'react-router-dom'
import { Button, DatePicker, notification, Layout, Menu, Breadcrumb } from 'antd';

const { Header, Content, Footer } = Layout;

import 'antd/dist/antd.css';
import './style.less'

import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link,
} from "react-router-dom";



import {
    changeName,
} from '../../actions/todoActions'


const openNotification = () => {
    notification.open({
        message: 'Notification Title',
        description:
            'This is the content of the notification. This is the content of the notification. This is the content of the notification.',
        onClick: () => {
            console.log('Notification Clicked!');
        },
    });
};

class Sprint extends Component {


    render() {

        const { dispatch, sprint } = this.props


        return (
            <div id="sprint">
                <Layout className="layout">
                    <Header>
                        <div className="logo" />
                        <Menu
                            theme="dark"
                            mode="horizontal"
                            defaultSelectedKeys={['2']}
                            style={{ lineHeight: '64px' }}
                        >
                            <Menu.Item key="1">nav 1</Menu.Item>
                            <Menu.Item key="2">nav 2</Menu.Item>
                            <Menu.Item key="3">nav 3</Menu.Item>
                        </Menu>
                    </Header>
                    <Content style={{ padding: '0 50px' }}>
                        <Breadcrumb style={{ margin: '16px 0' }}>
                            <Breadcrumb.Item>Home</Breadcrumb.Item>
                            <Breadcrumb.Item>List</Breadcrumb.Item>
                            <Breadcrumb.Item>App</Breadcrumb.Item>
                        </Breadcrumb>
                        <div style={{ background: '#fff', padding: 24, minHeight: 280 }}>Content</div>
                    </Content>
                    <Footer style={{ textAlign: 'center' }}>Ant Design ©2018 Created by Ant UED</Footer>
                </Layout>
                <h1>My Sprint</h1>
                <Button type="primary">Primary</Button>
                <DatePicker />

                <Button type="primary" onClick={openNotification}>
                    Open the notification box
                </Button>
                <button onClick={() => dispatch(changeName('Mishu'))}>Click Me</button>
                <h2>{this.props.todo.name}</h2>
            </div>
        )
    }
}

const mapStateToProps = state => ({
    todo: state.todoReducer
})


// const WrappedComponent = Form.create({ name: 'sprint' })(Sprint);

export default withRouter(connect(mapStateToProps)(Sprint));