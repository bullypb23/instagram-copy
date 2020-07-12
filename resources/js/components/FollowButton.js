import React from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

function FollowButton(props) {
    const followUser = () => {
        axios.post('/follow/' + props.userId)
            .then(response => {
                console.log(response.data);
            })
    }
    return (
        <button className="btn btn-primary ml-4" onClick={followUser}>Follow</button>
    );
}

export default FollowButton;

if (document.getElementById('follow-button')) {
    const el = document.getElementById('follow-button');
    const props = Object.assign({}, el.dataset);
    ReactDOM.render(<FollowButton {...props} />, el);
}
