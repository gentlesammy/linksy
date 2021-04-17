import React from 'react'
import userImageDefault from "./profile.jpg";
import "./userData.css";
const UserData = ({userdata}) => {

    const descShortner = (str) => {
        return str.substring(0,100)
    }
    return (
        <div className="user_data">
            {/* image section */}
            <div className="user_data_img">
                <img src={userdata.image || userImageDefault} alt={userdata.username} />
            </div>
            {/* name section */}
            <div className="user_data_name">
                <h2 style={{color: userdata.color}}>{userdata.username}</h2>
            </div>
            {/* description */}
            <div className="user_data_desc">
                <h5 style={{color: userdata.color, opacity: 0.8}}>{userdata.description ? descShortner(userdata.description) : "welcome to my page"}</h5>
            </div> 
        </div>
    )
}

export default UserData
