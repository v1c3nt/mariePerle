import React from "react";
import Button from "./Button";

// const articles = () => {
// axios
//   .get("http://127.0.0.1:8000/api/articles")
//   .then(function (response) {
//     console.log(response.data);
//   })
//   .catch(() => false);
// };
class Article extends React.Component {
  constructor() {
    super();
  }
  

  handleClick(evt) {
    console.log("clique", evt.target);
  };

  render() {
 
    return (
    <div>
      <Button onClick={this.handleClick} article={this.props.article.id}/>
    </div>
    );
  }
}

export default Article;
