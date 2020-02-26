/**
 * Define actions
 */
export const CHANGE_NAME = 'CHANGE_NAME'


export let changeName = (name) => (dispatch, getState) => {

    dispatch({
        type: CHANGE_NAME,
        payload: {
            name: name
        }
    })

}