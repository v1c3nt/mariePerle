import React, { useEffect } from 'react';
import './GSAPComponent.css';
import { gsap } from 'gsap';

function GSAPComponent(props) {
    const header = React.createRef();

    useEffect(() => {
        gsap.to(header.current, {color: "8c0", duration: 2})
    }, [header]);

    return (<>
        <h1 ref={header}>
            Hello GSAP World!!
        </h1>
        </>
    );
}

export default GSAPComponent;