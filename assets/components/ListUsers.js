import React from "react";
import '../styles/app.css';
class App extends React.Component {

    // Constructor
    constructor(props) {
        super(props);

        this.state = {
            items: [],
            DataisLoaded: false
        };
    }

    // ComponentDidMount is used to
    // execute the code
    componentDidMount() {
        fetch(
            "http://127.0.0.1:8000/api")
            .then((res) => res.json())
            .then((json) => {
                this.setState({
                    items: json,
                    DataisLoaded: true
                });
            })
    }
    render() {
        const { DataisLoaded, items } = this.state;
        if (!DataisLoaded) return <div>
            <h1> Please wait .... </h1> </div> ;

        return (
            <div className = "App">
                <h1> **   Users List   **    </h1> {
                items.map((item) => (
                    <ol key = { item.id } >

                        ID: { item.id } --
                        Email: { item.email }
                    </ol>
                ))
            }
            </div>
        );
    }
}

export default App;
