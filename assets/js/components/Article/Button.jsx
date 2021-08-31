import React from "react";

const Button = ({onClick, article:xx}) => (
	<div onClick={onClick}
		className="learn-more" data-foo={xx}>en savoir plus by react
	</div>
	);

export default Button;
