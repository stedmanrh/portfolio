var posts = [],
    page = 0;

var Post = function(message, fontSize) {
    this.message = message;
    this.fontSize = fontSize;
    this.likes = Math.round(1000*Math.random());
    var timeOffset = Math.round(1000*60*2880*Math.random());
    this.age = new Date(Date.now() - timeOffset);

    return this;
};

posts.push(
    new Post("I am in my 30s and more beautiful than ever.", 34),
    new Post("I am NOT your maid", 48),
    new Post("House chores?\nMy work.\n\nWatching children?\nMy work.\n\nWatching TV...\nYour work?", 18),
    new Post("I am not the \"flower\" of the office.", 28),
    new Post("I don’t want to call my sister-in-law, \"Lady.\"", 26),
    //
    new Post("Get your eyes off of my body.", 40),
    new Post("Don't talk to me like you know better than me", 26),
    new Post("Wife is not your personal chef.", 36),
    new Post("I am\nnot your potential girlfriend or wife.", 36),
    new Post("Why do I have to prepare for YOUR ancestral rights?", 22),
    //
    new Post("I AM NOT A BIRTH MACHINE.", 34),
    new Post("pinching my butt is not a compliment, it's harassment", 18),
    new Post("NO MEANS NO", 44),
    new Post("When a mother wants to work, she's being greedy?", 22),
    new Post("My silence is your comfort", 26),
    //
    new Post("I am not being bossy.\n\nI'm just being a boss.", 24),
    new Post("Being a housewife doesn't mean I'm chilling all day.", 26),
    new Post("Why can only men give their names to our children?", 24),
    new Post("Why do I have to be the one to sacrifice?", 32),
    new Post("I had to quit my job to take care of your kid.", 28)
);
