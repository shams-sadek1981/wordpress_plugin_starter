import {
    CHANGE_NAME,
} from '../actions/todoActions'


/**
 * Initial State
 */
const initialState = {
    name: 'Forazi Ahmed'
}


const todoReducer = (state = initialState, action) => {
    switch (action.type) {
        case CHANGE_NAME:
            return Object.assign({}, state, {
                name: action.payload.name
            })
        default:
            return state
    }
}


export default todoReducer