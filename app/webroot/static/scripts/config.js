const getStaticPath = (env) => {
  let staticBase = ".";
  if (env === "public") {
    // staticBase = 'http://localhost:3013/star'
    staticBase = "http://sar3.idreamsky.com/templets/hl_donghua";
  }
  return staticBase;
};

module.exports = {
  getStaticPath,
};
