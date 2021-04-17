import React, { useState, useEffect } from "react";
import ReactDOM from "react-dom";
import axios from "axios";
import UserData from "./userData";
import UserLinks from "./userLinks";
import "./user.css";


const UserR = () => {
    const [Links, setLinks] = useState(null);
    const [loading, setLoading] = useState(true);
    const [errorLoading, setErrorLoading] = useState(false);
    const [User, setUser] = useState(null)

    let dataN = document.getElementById("user");
    const props = Object.assign({}, dataN.dataset);
    
    const fetchUser = ()=> {
       fetch(`/getUser/${props.user}`)
        .then((res) => {
            return res.json();
        })
        .then((data) => {
            setLinks(data.links);
            setUser(data.user);
            setLoading(false);
            setErrorLoading(false);
        })
        .catch((err) => {
            console.log("errore", err);
            setErrorLoading(true);
            setLinks(null);
             setLoading(false);
        });
    }

    const storeClickData = (link_id) => {
              let token = document
            .querySelector("#metadaddy")
            .getAttribute("content");
        const url = "/visit/record";
                fetch(url, {
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                    },
                method: 'post',
                credentials: "same-origin",
                body: JSON.stringify({
                    linkId: link_id
                })
            })
            .then((res) => {
                 return res.json();
            })
            .then((data) => {
                // TODO:handle this later
                console.log(data);
            })
            .catch(function(error) {
                console.log(error);
            });
    }

    useEffect(() => {
        fetchUser();
       
    }, [])
    
    return (
        <div className="container">
            {
                loading && (
                    <div className="loader_div">
                        <h2><span>LOADING </span> Links for {props.user.toUpperCase()}</h2>
                    </div>
                )
            }

            {
                !loading  && !errorLoading &&(
                    <div className="profileBox" style={{background: User.background, }}>
                        <UserData userdata = {User} />
                        <div className="user_links_box">
                                {
                                    Links?.map((Li) =>{
                                        return (
                                            <div className="link_box" key={Li.id} style={{background: User.color, }}>
                                                <p style={{color: User.background, }}>{Li.name.toUpperCase()}</p>
                                                <button className="btn btn-visit"
                                                onClick={() =>{
                                                    //redirect to another url,
                                                    window.open(Li.link, "_blank");
                                                    //add count to number of visit in laraavel
                                                    storeClickData(Li.id);
                                                }}
                                                >Visit</button>
                                            </div>
                                        )
                                    })
                                }
                        </div>
                        
                    </div>

                )

            }




        </div>
    );
};

export default UserR;

if (document.getElementById("user")) {
    ReactDOM.render(<UserR />, document.getElementById("user"));
}
