import React from 'react'

const UserLinks = ({userlinks}) => {
    return (
        <div className="user_links">
            {
                userlinks.map((uL) => {
                   return (<div className="link_box" key={uL.id}>
                        <h4>{uL.title}</h4>
                    </div>)
                })
            }
            
        </div>
    )
}

export default UserLinks
