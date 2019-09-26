const addSinger = function (name) {
    const singer = { name, isSinging: false, score: 0 };
    const singerListRef = database.ref('singer_list');
    const newSingerRef = singerListRef.push();
    newSingerRef.set(singer)
        .then(function () {
            return newSingerRef.once('value');
        })
        .then(function (snapshot) {
            var data = snapshot.val();
            console.log(data);
            return snapshot.val();
        });
};

const activateSinger = function () {
    const singerListRef = database.ref('singer_list');
    const activeSinger = singerListRef.limitToFirst(1)
        .once('value')
        .then(function (snapshot) {
            const singer = snapshot.val();
            singer.update({isSinging: true});
            database.ref('singing').push().set(singer);
            return singer;
        });
};