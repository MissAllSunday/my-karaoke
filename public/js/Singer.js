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

const getSingerActive = function () {
    const singerListRef = database.ref('singer_list')
        .then(function (snapshot) {
            var  singer = snapshot
            return singer;
        });
};

addSinger('Singer');