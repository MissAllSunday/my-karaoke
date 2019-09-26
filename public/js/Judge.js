const judgeSinger = function (singerId) {
    const singerListRef = database.ref('singer_list/' + singerId);
    const singerRef = singerListRef.once('value')
        .then(function (snapshot) {
            const singer = snapshot.val();
            const score = singer.score + 1;
            singerListRef.update({score});
        });
};

judgeSinger('-LpjEDW19kJuTPo0IFb4');