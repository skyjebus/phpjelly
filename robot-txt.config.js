module.exports = {
    destinationPath : "/public",
    policy:
        {
            userAgent: "*",
            disallow: ["/admin"],
            allow: ["/"],
            sitemap: "https://phpjelly.com/sitemap.xml",
            host: "https://phpjelly.com",
        },
};