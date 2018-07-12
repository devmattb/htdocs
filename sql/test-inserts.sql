INSERT INTO projectPosts
    (title, subtitle, whatText, whyText, howText, projectCoverImgSrc, videoTitle1, videoCoverImg1, videoLink1, ongoingProject, createdBy)
VALUES
    (
    "ChipKit Tetris",
    "A Tetris Game On A 'Mini Computer.'",
    "A simple Tetris game using four buttons on a chipset (in this case, two connnected computerchips) with a display.",
    "Im doing this mainly to move further towards my Bachelors Degree in Computer Science.
    <br><br>
    HOWEVER! I've always found programming computers and machines quite intriguing.
    I'm pretty sure I'll stay in the 'web-world', but this sure is fun too!",
    "A chipset and a laptop is all I need for this project. That's the beauty of coding.
    <br><br>
    When it comes the the software I'll be writing, I will use the C programming language, combined with Assembler.",
    "../img/chipkit_tetris/chip_2.png",
    "TETRIS SHOWCASE",
    "../img/chipkit_tetris/tetris-background.jpg",
    "https://www.youtube.com/watch?v=a56wzoTroG4&t=7s",
    false,
    "Matt"
  );

INSERT INTO blogPost
    (postTitle, postText, CSSclass, createdBy)
VALUES
    ("Test 1", "test.png", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "qrendoadmin"),
    ("Test 2", "test.png", "This is a very important post. Thats why it breaks the pattern.","qrendoadmin"),
    ("Test 3", "test.png", "This post is just a regular post.", "qrendoadmin");
