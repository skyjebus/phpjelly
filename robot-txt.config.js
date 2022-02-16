module.exports = {
    destinationPath : "/public",
    policy:
        {
            userAgent: "*",
            disallow: ["/admin"],
            allow: ["/"],
        },
};