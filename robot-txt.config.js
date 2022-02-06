module.exports = {
    destinationPath : "/public",
    policy:
        {
            userAgent: "*",
            disallow: ["/functions"],
            allow: ["/"]
        },
};