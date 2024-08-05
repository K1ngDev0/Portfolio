import discord
from discord.ext import commands

client = commands.Bot(command_prefix = '!')

@client.event
async def on_ready():
    print("The bot is now ready to use!")
    print("-----------------------------")
    
@client.command()
async def hello(ctx):
    await ctx.send("Hello, I am your server manager!")
    
client.run('MTE5NDE5NTg5MjQ5MjgyODc5Mg.GNe4hj.SmFWW1bHwCPSA9pFSOfjbwGqJewr3zYAnoifqo')