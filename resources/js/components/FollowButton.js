import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

function FollowButton({ userId, follows }) {
    const [status, setStatus] = useState(follows == 1 ? true : false);
    const followUser = () => {
        axios.post('/follow/' + userId)
            .then(response => {
                setStatus(!status);
            })
            .catch(errors => {
                if(errors.response.status == 401) {
                    window.location = '/login';
                }
            })
    }
    return (
        <button className="btn btn-primary ml-4" onClick={followUser}>{status ? 'Unfollow' : 'Follow'}</button>
    );
}

export default FollowButton;

if (document.getElementById('follow-button')) {
    const el = document.getElementById('follow-button');
    const props = Object.assign({}, el.dataset);
    ReactDOM.render(<FollowButton {...props} />, el);
}
