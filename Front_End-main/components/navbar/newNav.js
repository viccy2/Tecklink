class UnregisteredNav extends HTMLElement {
  title = "";
  description = "";
  link = "";
  thumbnail = "";

  constructor() {
    super();

    this.attachShadow({
      mode: "open",
    });
    this.render();
  }

  set data(value) {
    console.log("-- setdata", value);
  }

  static get observedAttributes() {
    return ["title", "description", "link", "thumbnail"];
  }

  attributeChangedCallback(name, oldValue, newValue) {
    switch (name) {
      case "title":
        this.title = newValue || "NO TITLE";
        break;
      case "description":
        this.description = newValue || "";
        break;
      case "link":
        this.link = newValue || "/";
        break;
      case "thumbnail":
        this.thumbnail = newValue || "";
        break;
    }
    this.render();
  }

  render() {
    this.shadowRoot.innerHTML = `
    <div class='blog-post'>
        <h2></h2>
     <p></p>
     <a href=''>learn more</a>
    </div>
    `;

    this.titleElement = this.shadowRoot.querySelector("h2");
    this.descElement = this.shadowRoot.querySelector("p");
    this.linkElement = this.shadowRoot.querySelector("a");
  }
}

customElements.define("unregistered-nav", UnregisteredNav);

{
  const post = document.querySelector("blog-post");

  post.data = {
    title: "Web Components",
    description: "Lorem ipsum dolor sit amet consectetur, adipisicing elit.",
    link: "link/to/post",
  };
  // setTimeout(() => {
  //     post.removeAttribute('title')
  // }, 2500);
}
