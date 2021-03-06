<div class="card">
    <div class="card-header">
        Redux
    </div>
    <div class="card-body">
        <div class="blog-post">
            <h2 class="blog-post-title mr-btm-15">What is redux?</h2>
            <ul class="mr-btm-15">
                <li>A library that helps you to manage the state of the application.</li>
                <li>Redux is useful for large SPA.</li>
                <li>Manage the state of the application in <b>predictable</b> way.</li>
                <li>Decoupled archetecture.</li>
                <li>Testability</li>
            </ul>
            <img class="mr-btm-30" src="assets/images/when-to-use-redux.PNG" alt="when to use redux" />

            <h2 class="mr-btm-15 blog-post-title">Building Blocks of redux</h2>
            <ul class="mr-btm-30">
                <li>Store</li>
                <li>Actions</li>
                <li>Reducers</li>
            </ul>
            <h2 class="mr-btm-15">Store</h2>
            <p>A single JS object that contains the state of the application.</p>
            <img class="mr-btm-30" src="assets/images/store-with-component.png" /> If we have three different component and they are using
            same store, it means if any of the component update the value changes will be available in all the component.
            <h2 >Actions</h2>
            <p class="mr-btm-30">Plain JS object that represent something that has happened.</p>
            <h2 class="mr-btm-15">Reducer</h2>
            <p>A function that specifies how the state changes in response to an action.</p>
            <p>A reducer does not modify the state It returns the new state.</p>
            <p>Reducer is a pure function.</p>
            <h2 class="mr-btm-15">Pure Function</h2>
        </div>
    </div>
</div>