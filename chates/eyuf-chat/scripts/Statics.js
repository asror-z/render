window.Statics = {
  user(id) {
    return {
      avatar(fileName) {
        if (!fileName) {
          return Defaults.avatar;
        }

        if (/^https?:\/\//.test(fileName)) {
          return fileName;
        }

        return `/uploaz/eyuf/User/Photo/${id}/${fileName}`;
      },
    };
  },
};