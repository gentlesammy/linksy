import React from 'react'
import userImageDefault from "./profile.jpg";
import "./userData.css";
const UserData = ({userdata}) => {
    console.log(userdata);
    const descShortner = (str) => {
        return str.substring(0,100)
    }

    const getUserImage = (imageUrl) => {
        if(imageUrl.includes("cloudinary")){
            return $imgSrc;
        }

        return `/img/dp/${imageUrl}`;

    }
    return (
        <div className="user_data">
            {/* image section */}
            <div className="user_data_img">
                <img src={userdata.dp ? getUserImage(userdata.dp) : userImageDefault} alt={userdata.username} />
            </div>
            {/* name section */}
            <div className="user_data_name">
                <h4 style={{color: userdata.color}}>{userdata.username}</h4>
            </div>
            {/* description */}
            <div className="user_data_desc">
                <h5 style={{color: userdata.color, opacity: 0.8, padding: ' 2px 20px', textAlign: "center"}}>{userdata.description ? descShortner(userdata.description) : "welcome to my page"}</h5>
            </div> 
        </div>
    )
}

export default UserData
